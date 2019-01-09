FROM ubuntu:latest

#1.Setting
RUN apt-get update
RUN apt-get -y install sudo
RUN sudo apt-get -y install vim

#2.John the ripper
RUN mkdir /john
RUN cd /john
RUN wget https://www.openwall.com/john/j/john-1.8.0.tar.gz
RUN sudo apt-get install tar
RUN tar zxvf john-1.8.0.tar.gz
RUN cd ./src
RUN make clean linux-x84-64

USER root
CMD /bin/bash
