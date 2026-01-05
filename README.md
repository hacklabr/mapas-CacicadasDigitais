# Em Cena

## 🎭 Sobre o projeto

O Cacicadas Digitais é uma plataforma livre de confluência entre pessoas e organizações de territórios da Resex Tapajós-Arapiuns. Aqui reunimos dados e informações para uma governança territorial baseada nos nossos saberes. Por meio desta plataforma também contribuímos para o Sistema Nacional de Unidades de Conservação, nos defendemos do colonialismo de dados e cuidamos do que é importante para nós: a Floresta.

Este repositório é uma adaptação direta do **Mapas Culturais Base Project**, contendo configurações, estrutura e scripts necessários para rodar o projeto Em Cena.

Repositório:
👉 https://github.com/hacklabr/mapas-CacicadasDigitais/

---

## 🧱 Base técnica

Este projeto utiliza:

- Mapas Culturais (core)
- Docker e Docker Compose
- PHP
- PostgreSQL + PostGIS
- Nginx
- Redis

A organização do repositório, bem como os scripts de automação, seguem o padrão definido pelo **Mapas Culturais Base Project**.

---

## 📁 Estrutura de arquivos

Os principais arquivos e diretórios do projeto são:

- **.env_sample** – Modelo para criação do arquivo `.env`
- **start.sh** – Inicializa o ambiente de produção/homologação
- **restart.sh** – Reinicializa o ambiente de produção/homologação
- **stop.sh** – Desliga o ambiente de produção/homologação
- **update.sh** – Atualiza o ambiente de produção
- **logs.sh** – Exibe os logs do docker-compose
- **bash.sh** – Acessa o terminal do container do Mapas Culturais
- **psql.sh** – Acessa o console do PostgreSQL
- **init-letsencrypt.sh** – Auxilia na criação do certificado Let's Encrypt
- **docker-compose.yml** – Definição dos serviços do ambiente de produção/homologação
- **docker-compose-certbot.yml** – Serviços usados para geração de certificado SSL
- **docker/** – Arquivos de configuração do Docker
  - **common/** – Configurações comuns
  - **db/** – Dump padrão do banco de dados
  - **production/** – Configurações exclusivas de produção
- **dev/** – Scripts e configurações para desenvolvimento local
  - **start.sh** – Sobe o ambiente de desenvolvimento
  - **bash.sh** – Acessa o container da aplicação
  - **shell.sh** – Acessa o shell do Mapas Culturais
  - **psql.sh** – Acessa o banco de dados
  - **docker-compose.local.yml** – Docker Compose do ambiente local
  - **watch.sh** – Compilação de assets do tema
- **plugins/** – Plugins utilizados no projeto Em Cena
- **themes/** – Temas utilizados no projeto Em Cena

---

## 🚀 Ambiente de desenvolvimento

### Pré-requisitos

- Git
- Docker
- Docker Compose
- Linux ou macOS

---

### Iniciando o ambiente de desenvolvimento

Para subir o ambiente de desenvolvimento, execute:

```bash
cd dev
sudo ./start.sh
```

Após a inicialização, acesse no navegador:

👉 http://localhost/

---

### Parando o ambiente de desenvolvimento

Para parar o ambiente, utilize:

```text
Ctrl + C
```

---

### 👤 Usuário administrador padrão

O banco inicial inclui um usuário com permissão total:

- **E-mail:** `Admin@local`
- **Senha:** `mapas123`

> ⚠️ Usuário destinado apenas a ambientes de desenvolvimento.

---

### 📧 Teste de envio de e-mails

O ambiente de desenvolvimento inclui o **MailHog**, disponível em:

👉 http://localhost:8025

---

## 🎨 Temas

Os temas utilizados pelo Em Cena estão localizados em:

```text
themes/
```

A ativação do tema é feita por meio dos arquivos de configuração do Mapas Culturais, tanto para desenvolvimento quanto para produção.

---

## 🧩 Plugins

Os plugins utilizados pelo Em Cena estão localizados em:

```text
plugins/
```

A habilitação dos plugins é feita por meio do arquivo de configuração correspondente no diretório `docker/common`.

---

## 🏗 Ambiente de produção (resumo)

> ⚠️ Este resumo não substitui a documentação completa do Mapas Culturais Base Project.

Passos principais:

1. Clonar o repositório no servidor
2. Criar o arquivo `.env` a partir do `.env_sample`
3. (Opcional) Configurar certificado SSL com Let's Encrypt
4. Subir o ambiente com:

```bash
sudo ./start.sh
```

---

## 🔄 Atualização do ambiente

Para atualizar o ambiente de produção, execute:

```bash
sudo ./update.sh
```

Esse script realiza:

- Pull da imagem do Mapas Culturais
- Build da imagem do projeto
- Reinicialização do docker-compose

---

## 💾 Backup

O backup deve ser realizado manualmente ou automatizado externamente, utilizando os comandos e diretórios abaixo.

### Backup do banco de dados

O banco de dados PostgreSQL pode ser exportado diretamente a partir do container Docker com o comando:

```bash
docker compose exec db pg_dump -U mapas mapas > backup.sql
```

Esse comando gera um dump completo do banco de dados da aplicação.

> 💡 É recomendável compactar o arquivo gerado e armazená-lo em local seguro.

---

### Backup dos arquivos da aplicação

Além do banco de dados, é necessário realizar backup dos arquivos persistentes localizados no diretório:

```text
docker-data/
```

Esse diretório contém, entre outros:

- arquivos enviados pelos usuários
- arquivos privados da aplicação
- logs
- certificados (quando aplicável)

O backup pode ser feito copiando o diretório inteiro, por exemplo:

```bash
cp -r docker-data /caminho/para/backups/docker-data
```

---



## 🤝 Créditos

- Plataforma baseada no **Mapas Culturais**
- Estrutura técnica derivada do **Mapas Culturais Base Project**
- Projeto **Cacicadas Digitais**, sobrerania digital popular das pessoas e organizações de territórios da Resex Tapajós-Arapiuns.

