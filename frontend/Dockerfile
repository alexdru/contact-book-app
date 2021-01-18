FROM node:lts-alpine

WORKDIR /var/www/contacts-book-app/frontend

COPY ./package*.json ./

RUN npm install && npm install -g @vue/cli

COPY . .

CMD ["npm", "run", "build"]