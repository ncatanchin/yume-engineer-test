# Dockerfile
FROM node:21-alpine

RUN mkdir -p /www
WORKDIR /www

RUN apk update && apk upgrade
RUN apk add git

COPY . /www
RUN yarn install

EXPOSE 3000

CMD [ "yarn", "dev", "-o"]