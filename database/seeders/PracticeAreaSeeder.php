<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PracticeAreaSeeder extends Seeder
{
    public function run()
    {
        $now = Carbon::now();

        $practiceAreas = [
            [
                'name' => 'Corporate',
                'description' => 'Business transactions can be formulated in all shapes and sizes, the structure of which is guided not only by our clients’ wishes but also restrictions and requirements of various taxation and general business laws.',
                'created_at' => $now
            ],
            [
                'name' => 'Estate Planning',
                'description' => 'Having a well-designed estate plan can provide numerous benefits to you and your loved ones, ensuring your children are provided and cared for according to your desires or addressing complex tax planning needs.',
                'created_at' => $now
            ],
            [
                'name' => 'Probate',
                'description' => 'Probate is the legal process whereby the property of a deceased person is marshaled by the Personal Representative of the estate and ultimately distributed to heirs and devisees after resolution of all claims against the estate.',
                'created_at' => $now
            ],
            [
                'name' => 'Entity Formation',
                'description' => 'Selection of the proper entity type and income taxation structure for a new business or investment is vital and can be a confusing and highly technical process.',
                'created_at' => $now
            ],
            [
                'name' => 'Asset Protection',
                'description' => 'Due to the litigious nature of our society, every individual is exposed to the risk of a lawsuit from any number of causes. An individual with substantial wealth or one who works or invests in a risk-filled industry is at a higher risk of being named a defendant.',
                'created_at' => $now
            ],
            [
                'name' => 'Complex Income Tax Planning',
                'description' => 'Each of our attorneys holds a Masters of Law in Taxation (LL.M.). Therefore, everything we do for our clients is done with an eye towards minimizing their overall income tax burden.',
                'created_at' => $now
            ],
            [
                'name' => 'Securities',
                'description' => 'Success of any business depends on having adequate capital to fund the particular operation. When debt financing is not desired or available, private offerings and sales of securities are often viable alternatives to support a new or existing endeavor.',
                'created_at' => $now
            ],
        ];

        DB::table('practice_area')->insert($practiceAreas);
    }
}
