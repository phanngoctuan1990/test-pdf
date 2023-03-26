## Setup Laravel Snappy

# Install Fonts

-   sudo apt install fonts-ipafont-gothic -y

# Install Larave; Snappy

-   sudo apt install wkhtmltopdf
-   echo ">> Installing WkhtmltoPDF 0.12.6.1”
-   wget https://github.com/wkhtmltopdf/packaging/releases/download/0.12.6.1-2/wkhtmltox_0.12.6.1-2.jammy_amd64.deb (NOTE: check server install with [wkhtmltopdf packaging](https://github.com/wkhtmltopdf/packaging/releases) )
-   sudo dpkg -i wkhtmltox_0.12.6.1-2.jammy_amd64.deb
-   sudo apt-get --yes -f install
-   sudo cp /usr/local/bin/wkhtmlto\* /usr/bin/


wkhtmltopdf:
#####################################

#### Install all dependencies
apt-get install -y \
libxrender1 \
libfontconfig1 \
libx11-dev \
libjpeg62 \
libxtst6 \
wget \
&& wget https://github.com/h4cc/wkhtmltopdf-amd64/blob/master/bin/wkhtmltopdf-amd64?raw=true -O /usr/local/bin/wkhtmltopdf \
&& chmod +x /usr/local/bin/wkhtmltopdf \
#####################################

wkhtmltoimage:
#####################################

Install all dependencies
apt-get install -y \
libxrender1 \
libfontconfig1 \
libx11-dev \
libjpeg62 \
libxtst6 \
wget \
&& wget https://github.com/h4cc/wkhtmltoimage-amd64/blob/master/bin/wkhtmltoimage-amd64?raw=true -O /usr/local/bin/wkhtmltoimage \
&& chmod +x /usr/local/bin/wkhtmltoimage \