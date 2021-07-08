# Contact book App
"Contact book" vue-application that allows you to display a list of contacts with the ability to add and sort them.

Requirements:
- docker-compose
- frontend: @vue/cli, bootstrap css, without jquery
- backend: ~~php api without frameworks~~ Laravel
- database: sqlite

## Installation

Step-by-step instructions for starting a project:

**Run docker-compose:**
```bash
docker-compose up
```

**Create `.env` and database files for a backend:**
```bash
docker exec -it php cp .env.example .env
docker exec -it php cp .\database\contacts.sqlite.example .\database\contacts.sqlite
```

**Create `.env` file for a frontend (for running container):**
```bash
docker exec -it vue cp .env.example .env
```

**Create `.env` file for a frontend (for a stopped container):**
```bash
cd frontend
cp .env.example .env
docker-compose restart
```
> replace `cp` to `copy` for Windows OS

**Run application:**
```
http://localhost
```

## License

This project is licensed under the MIT License