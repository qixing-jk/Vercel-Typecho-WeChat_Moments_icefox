# Vercel-Typecho-WeChat_Moments_icefox

[简体中文](README_zh-CN.md) | [English](README.md)

This project allows you to deploy a Typecho blog for free on Vercel, specifically configured with the WeChat Moments style theme `icefox`.

## Features

- **Free Deployment**: Host your Typecho blog on Vercel at no cost.
- **Serverless**: No need to manage servers, Vercel handles the infrastructure.
- **Pre-configured Theme**: Comes with the stylish [WeChat_Moments_icefox](https://github.com/qixing-jk/icefox) theme.
- **Database Support**: Configured to work with databases like TiDB Cloud with SSL connections.

## Live Demo

live deployment here: [https://moments.qixing1217.top/](https://moments.qixing1217.top/)

## Deployment Guide

You can deploy your own instance of this project to Vercel with a single click.

<a href="https://vercel.com/new/import?s=https://github.com/qixing-jk/Vercel-Typecho-WeChat_Moments_icefox&hasTrialAvailable=1&showOptionalTeamCreation=false&project-name=vercel-typecho-we-chat-moments-icefox&framework=other&totalProjects=1&remainingProjects=1"><img src="https://vercel.com/button"></a>

For a detailed, step-by-step tutorial, please refer to this blog post (in Chinese):
[Deploying a Dynamic Typecho Blog on Vercel (Example with IceFox Theme and SSL DB Connection)](https://blog.qixing1217.top/article/8879698e-363b-407a-9ec4-72f713c4e0bd)

### Environment Variables

After clicking the deploy button, you will be prompted to set up the environment variables. These are crucial for connecting to your database.

```dotenv
# Database host address
TYPECHO_HOST=""

# Database name
TYPECHO_DATABASE="tidbcloud_WeChat_Moments_icefox"

# Database username
TYPECHO_USERNAME=""

# Database password
TYPECHO_PASSWORD=""

# Table prefix for Typecho
TYPECHO_PREFIX="typecho_"

# Database adapter
TYPECHO_ADAPTER_NAME="Pdo_Mysql"

# Database charset
TYPECHO_CHARSET="utf8mb4"

# Database engine
TYPECHO_ENGINE="MyISAM"

# Database port
TYPECHO_PORT="4000"

# Path to the SSL CA certificate (e.g., isrgrootx1.pem)
TYPECHO_SSL_CA="isrgrootx1.pem"
```

## Included Theme

This project is pre-packaged with the beautiful [WeChat_Moments_icefox](https://github.com/qixing-jk/icefox) theme to give your blog a unique, social-media-like appearance.