FROM ubuntu:18.04

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update

# Install nginx
RUN apt-get install -y --no-install-recommends nginx


# Install div Tools
RUN apt-get install -y --no-install-recommends wget curl nano zip unzip openssl ca-certificates

# Output logs to stdout/stderr TODO
RUN ln -sf /dev/stdout /var/log/nginx/access.log && \
    ln -sf /dev/stderr /var/log/nginx/error.log

# Remove the default Nginx configuration file
RUN rm -v /etc/nginx/nginx.conf
ADD nginx.conf /etc/nginx/
ADD .htpassword /var/.htpassword

CMD service nginx start
