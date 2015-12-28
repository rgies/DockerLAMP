#
# Ubuntu Dockerfile
#


# Pull base image.
FROM ubuntu:14.04

# Install
RUN apt-get update

# Add files.
#ADD root/.bashrc /root/.bashrc
#ADD root/.gitconfig /root/.gitconfig
#ADD root/.scripts /root/.scripts

# Set environment variables.
ENV HOME /root

# Define working directory.
WORKDIR /root

# Define default command.
CMD ["bash"]
