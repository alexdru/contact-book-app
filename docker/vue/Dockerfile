FROM node:lts-alpine

# Set working directory
WORKDIR /var/www/contacts-book-app/frontend

# Copy project files
COPY . .

# Install NPM
RUN npm install
# RUN npm install -g @vue/cli-service

CMD ["npm", "run", "build"]