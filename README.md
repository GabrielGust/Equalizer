<div align="center">
    <img src="https://user-images.githubusercontent.com/65090609/113049980-b3973180-917a-11eb-923c-c4520c6468c4.png" alt="Equalizer project logo">
    <h1>Equalizer</h1>
</div>

<h4 align="center"> 
	✔️ Equalizer is under construction, I accept tips and changes ✔️
</h4>

<p align="center">
 • <a href="#-about">About</a> •
 <a href="#-features">Features</a> •
 <a href="#-requiriments">Requiriments</a> •
 <a href="#-getting-started">Getting Started</a> • 
 <a href="#-how-to-contribute">How to contribute</a> •
 <a href"#-what-is-noobframework">What is noobframework?</a> •
 <a href="#-autor">Autor</a> •
 <a href="#-license">License</a> •
</p>

## 💻 About

📓 Equalizer is a website, made with Noobframework, that solves quadratic equations and presents their maximum and minimum values. The project was made using only PHP, HTML and CSS.

---

## ⚙️ Features

- [x] Variable insertion screen:
  - [ ] Sending the inputted data A, B and C 
  
- [x] Resolution screen:
  - [ ] Show results for X' and X" 
  - [ ] Button redirects to the maximum and minimum point screen

- [x] Maximum and minimum point screen:
  - [ ] Show the maximum and minimum points according to the variables
  - [ ] Button redirects to the quadratic function creation screen
  
- [x] Anoter features:
  - [x] Dynamic content between actions
  - [x] Code reuse

---

## 🔧 Requiriments

* PHP >= 7.1
* apache with Rewrite mode enabled

---

## 👣 Getting started

### Installation

Just clone or download this repository. :)

### Docker

If you use [docker](https://www.docker.com/), at the root of the project there is a Dockerfile file with the minimum requirements to run the project.

You can run with docker by building the image and running it.

For example, at the root of the project, execute:

```bash
docker build -t equalizer .
docker run -d --name equalizer -p 80:80 -v $(pwd):/var/www/html equalizer
```

### How to use

If you use the built-in PHP server on local development, start it with `router.php` as the input file, to effective route rewrite. Below is an example of the command. Run at the root of the project:

```bash
php -S localhost:8080 router.php
```

---

## 🔧 How to contribute

1. **Fork** the project.
2. Create a new branch with your changes: `git checkout -b my-feature`
3. Save your changes and create a commit message telling you what you did: `git commit -m "feature: My new feature"`
4. Submit your changes: `git push origin my-feature`

---

## 🧑🏾‍💻 Autor

<a href="https://www.linkedin.com/in/gabriel-gustavo-araújo-tinoco-3903241b4/"></a>
<img style="border-radius: 100px;" src="https://avatars3.githubusercontent.com/u/65090609?s=460&u=7439510aef27e2e881033aa12c2fe840f6743ed8&v=4" width="200px;" alt="Foto de perfil"/>
<br>
<sub><p><b font-size="25px">Gabriel Gustavo<b><p></sub>
[![Linkedin Badge](https://img.shields.io/badge/-Gabriel-blue?style=flat-square&logo=Linkedin&logoColor=white&link=https://www.linkedin.com/in/gabriel-gustavo-araújo-tinoco-3903241b4/)](https://www.linkedin.com/in/gabriel-gustavo-araújo-tinoco-3903241b4/) 
[![Gmail Badge](https://img.shields.io/badge/-gabrielaraujotinoco@gmail.com-c14438?style=flat-square&logo=Gmail&logoColor=white&link=mailto:gabrielaraujotinoco@gmail.com)](mailto:gabrielaraujotinoco@gmail.com)

---

## What is noobframework?

Noobframework is a MVC framework with automated [friendly URL](https://techterms.com/definition/friendly_url) in PHP for beginners. Aimed at anyone learning the [MVC design pattern](https://pt.wikipedia.org/wiki/MVC) in [PHP](https://www.php.net/). See more in Noobframework [repo](https://github.com/edigar/noobframework).

---

## 📝 Licence

This project is under the [MIT](./LICENSE) license.

Made with ❤️ by Gabriel Gustavo [Contact](https://www.linkedin.com/in/gabriel-gustavo-araújo-tinoco-3903241b4/)

---
