FROM ubuntu:14.04

#1.Setting
RUN apt-get update
RUN apt-get -y install sudo
RUN sudo apt-get -y install vim

#2.
RUN sudo apt-get -y install apache2



#3.Useradd
RUN useradd att && echo "att:att" | chpasswd
RUN mkdir -p /home/att && chown -R att:att /home/att

USER root
CMD /bin/bash


