# Vercel-Typecho-WeChat_Moments_icefox

[简体中文](README_zh-CN.md) | [English](README.md)

本项目可以让你在 Vercel 上免费部署一个 Typecho 博客，并已特别配置了微信朋友圈风格的 `icefox` 主题。

## ✨ 特性

- **免费部署**: 在 Vercel 上免费托管你的 Typecho 博客，无需支付任何费用。
- **无服务器架构**: 你不需要管理服务器，Vercel 会负责处理所有底层基础设施。
- **预置主题**: 项目内置了风格独特的 [WeChat_Moments_icefox](https://github.com/qixing-jk/icefox) 主题。
- **数据库支持**: 已配置为支持像 TiDB Cloud 这样需要 SSL 连接的数据库。

## 在线演示

实际部署站点：[https://moments.qixing1217.top/](https://moments.qixing1217.top/)

## 部署指南

你可以通过一键部署，轻松地在 Vercel 上创建你自己的博客实例。

<a href="https://vercel.com/new/import?s=https://github.com/qixing-jk/Vercel-Typecho-WeChat_Moments_icefox&hasTrialAvailable=1&showOptionalTeamCreation=false&project-name=vercel-typecho-we-chat-moments-icefox&framework=other&totalProjects=1&remainingProjects=1"><img src="https://vercel.com/button"></a>

部署图文教程：
[在Vercel下部署 Typecho 动态博客（以IceFox微信朋友圈主题和SSL数据库连接为例）](https://blog.qixing1217.top/article/deploy-typecho-dynamic-blog-on-vercel-using-icefox-theme-and-ssl-database-connection)

### 环境变量

点击部署按钮后，Vercel 会提示你设置环境变量。这些变量对于连接你的数据库至关重要。

```dotenv
# 数据库主机地址
TYPECHO_HOST=""

# 数据库名称
TYPECHO_DATABASE="tidbcloud_WeChat_Moments_icefox"

# 数据库用户名
TYPECHO_USERNAME=""

# 数据库密码
TYPECHO_PASSWORD=""

# Typecho 数据表前缀
TYPECHO_PREFIX="typecho_"

# 数据库适配器
TYPECHO_ADAPTER_NAME="Pdo_Mysql"

# 数据库编码
TYPECHO_CHARSET="utf8mb4"

# 数据库引擎
TYPECHO_ENGINE="MyISAM"

# 数据库端口
TYPECHO_PORT="4000"

# SSL 证书路径 (例如: isrgrootx1.pem)
TYPECHO_SSL_CA="isrgrootx1.pem"
```

## 内置主题

本项目预装了精美的 [WeChat_Moments_icefox](https://github.com/qixing-jk/icefox) 主题，它将为你的博客带来独特的社交媒体风格外观。