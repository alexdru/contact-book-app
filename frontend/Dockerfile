FROM node:lts-alpine

# Set working directory
WORKDIR /var/www/contacts-book-app/frontend

# Copy project files
COPY . .

# Install NPM
RUN npm install && npm install -g @vue/cli

CMD ["npm", "run", "build"]