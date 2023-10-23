# YumeFood Tech test

## Introduction

Welcome to the YumeFood tech test! The goal here is to assess your code comprehension and ability 
to work in an existing codebase. 
This is designed to be as similar to our development environment as possible and includes some code
taken from the current codebases.

There are no required changes prior to the interview; you simply need to set up and run the project.
The interview will consist of some questions regarding the codebase and a short pair programming session.

The project is comprised of two main components:

1. A **Laravel 10** based API that also provides OAuth2 support.
2. A **Nuxt3** front-end that authenticates via the above API.

## Prerequisites

1. Make
2. Docker
3. Docker Compose
4. Git (for cloning the repo)

## Getting Started

Here are the steps to get the project up and running using Docker.

### Clone the Repository

```bash
git clone https://github.com/yumefood/yume-engineer-test.git
cd yume-engineer-test
```

### Build and Run the Containers

Navigate to the root directory where the `docker-compose.yml` file is located and run:

```bash
make setup
docker-compose up
```

This will build and run the `web`, `api`, and `api-db` services, linking them appropriately as specified in `docker-compose.yml`.

### Access the Applications

After all containers are up:
- Access the Nuxt3 frontend at: [http://localhost:3000](http://localhost:3000)
- Access the Laravel API at: [http://localhost:8080](http://localhost:8080)

You will be able to log in when prompted with these details:<br/>
&nbsp;&nbsp;&nbsp;&nbsp;**Username:** techtest@yumefood.com.au<br/>
&nbsp;&nbsp;&nbsp;&nbsp;**Password:** password
