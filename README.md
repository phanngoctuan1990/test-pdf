## Setup Laravel Snappy

# Install Fonts

-   sudo apt install fonts-ipafont-gothic -y

# Install Larave; Snappy

-   echo ">> Installing WkhtmltoPDF 0.12.6.1”
-   wget https://github.com/wkhtmltopdf/packaging/releases/download/0.12.6.1-2/wkhtmltox_0.12.6.1-2.jammy_amd64.deb (NOTE: check server install with [wkhtmltopdf packaging](https://github.com/wkhtmltopdf/packaging/releases) )
-   sudo dpkg -i wkhtmltox_0.12.6.1-2.jammy_amd64.deb
-   sudo apt-get --yes -f install
-   sudo cp /usr/local/bin/wkhtmlto\* /usr/bin/
