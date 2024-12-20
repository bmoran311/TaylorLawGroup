echo 'Connecting to TaylorLaw Staging Database Server...'
ssh -i id_rsa.pub -L 5555:10.116.0.2:3306 forge@165.227.195.171
