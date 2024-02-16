# Vercel-Typecho-WeChat_Moments_icefox

**Vercel 免费部署 Typecho 博客 | Vercel Free Deploy Typecho Blog**

## 部署教程
[在Vercel下部署 Typecho 动态博客（以IceFox微信朋友圈主题和SSL数据库连接为例）](https://blog.qixing1217.top/article/8879698e-363b-407a-9ec4-72f713c4e0bd)

<a href="https://vercel.com/new/import?s=https://github.com/qixing-jk/Vercel-Typecho-WeChat_Moments_icefox&hasTrialAvailable=1&showOptionalTeamCreation=false&project-name=vercel-typecho-we-chat-moments-icefox&framework=other&totalProjects=1&remainingProjects=1"><img src="https://vercel.com/button"></a>
### 环境变量
```dotenv
TYPECHO_HOST="" # 数据库地址
TYPECHO_DATABASE="tidbcloud_WeChat_Moments_icefox" # 数据库名称
TYPECHO_USERNAME="" # 数据库用户名
TYPECHO_PASSWORD="" # 数据库密码
TYPECHO_PREFIX="typecho_" # 前缀
TYPECHO_ADAPTER_NAME="Pdo_Mysql" # 数据库适配器
TYPECHO_CHARSET="utf8mb4" # 数据库编码
TYPECHO_ENGINE="MyISAM" # 数据库引擎
TYPECHO_PORT="4000" # 数据库端口
TYPECHO_SSL_CA="isrgrootx1.pem" # 数据库SSL证书位置
```

### 选择的主题
[WeChat_Moments_icefox](https://github.com/qixing-jk/icefox)主题
