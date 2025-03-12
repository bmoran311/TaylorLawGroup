<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class FetchGoogleTaxNews extends Command
{
    protected $signature = 'fetch:google_tax_news {firm_id}';
    protected $description = 'Fetch all articles from the tax law news RSS feed and store them in the database';

    public function handle()
    {
        $firmId = $this->argument('firm_id');
        $rssUrl = 'https://news.google.com/rss/search?q=tax+law&hl=en-US&gl=US&ceid=US:en';

        $this->info("Fetching all tax law news articles for Firm ID: $firmId...");

        try {
            $response = Http::get($rssUrl);
            if ($response->failed()) {
                $this->error("Failed to fetch the RSS feed.");
                return;
            }

            $xml = simplexml_load_string($response->body(), "SimpleXMLElement", LIBXML_NOCDATA);
            $json = json_decode(json_encode($xml), true);

            // Get all articles from the feed
            $articles = $json['channel']['item'] ?? [];

            // If only one item is found, ensure it's an array
            if (!isset($articles[0])) {
                $articles = [$articles];
            }

            foreach ($articles as $article) {
                $title = $article['title'] ?? 'No Title';
                $link = $article['link'] ?? '#';
                $description = $article['description'] ?? 'No Description';
                $pubDate = isset($article['pubDate']) ? Carbon::parse($article['pubDate'])->toDateString() : now()->toDateString();
                $source = $article['source'] ?? 'Unknown';

                // Insert into the database, ensuring uniqueness by URL
                DB::table('news')->updateOrInsert(
                    ['url' => $link],
                    [
                        'firm_id' => $firmId,
                        'headline' => $title,
                        'publication_date' => $pubDate,
                        'publication' => $source,
                        'summary' => strip_tags($description),
                        'url' => $link,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]
                );
            }

            $this->info("Successfully fetched and stored " . count($articles) . " articles.");
        } catch (\Exception $e) {
            $this->error("Error: " . $e->getMessage());
        }
    }
}
