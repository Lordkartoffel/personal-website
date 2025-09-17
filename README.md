# Personal Website

A simple and customizable personal website built with PHP and Laravel.  
This project serves as a digital portfolio to showcase my resume, projects, and contact information.


## Table of Contents
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)

## Features
- Portfolio and about me section 
- Easily customizable structure and content  
- Containerized with Docker for easy deployment 
- Contact form with email sending and validation

## Installation

### 1. Clone the repository
```bash
git clone https://github.com/Lordkartoffel/personal-website.git
cd personal-website
```
### 2. Copy the example environment file and configure as needed
```bash
cp .env.example .env
```

### 3. Install PHP dependencies
```bash
compose install
```

### 4. Install Node.js dependencies and build assets:
```bash
npm install
npm run build
```

### 5. (Optional) Start with Docker:
```bash
docker-compose up -d
```

### 6. (For development) Run setup script
```bash
.\setup.bat
```

## Usage
- Access the website at http://localhost