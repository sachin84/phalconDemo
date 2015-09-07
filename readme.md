Phalcon Installation requirements:

1) PHP >=5.3 development resources
	notes : If you want to write UT's then you need php version 5.4.19 . So that Phalcon 2.0 can 		be installed and incubator can be also installed. For incubator you need phalcon 			above verison 2.0 .

2)GCC Compiler (Linux) because Phalcon is written in c extension.

3) Git and composer

	 notes: So that you can clone from git .

Steps to install Phalcon :

1. steps for cloning and building:

    git clone --depth=1 git://github.com/phalcon/cphalcon.git

    cd cphalcon/build

    sudo ./install

2. Now Open Php.ini file add the line given below

	extension=phalcon.so

3. After this restart your server
