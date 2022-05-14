FROM nginx:alpine as build

RUN apk add --update \
    wget

# Install hugo
# Hugo Releases: https://github.com/gohugoio/hugo/releases
ARG HUGO_VERSION="0.98.0" 
RUN wget --quiet "https://github.com/gohugoio/hugo/releases/download/v${HUGO_VERSION}/hugo_${HUGO_VERSION}_Linux-64bit.tar.gz" && \
    tar xzf hugo_${HUGO_VERSION}_Linux-64bit.tar.gz && \
    rm -r hugo_${HUGO_VERSION}_Linux-64bit.tar.gz && \
    mv hugo /usr/bin

# Build the Hugo site
COPY ./ /site
WORKDIR /site
RUN hugo

#Copy static files to Nginx
FROM nginx:alpine
COPY --from=build /site/public /usr/share/nginx/html

# Set the working directory to the built files
WORKDIR /usr/share/nginx/html