# 🚀 Projeto Text-to-Speech Laravel

Aplicação PHP com Laravel para conversão de texto em áudio usando a API VoiceRSS.

## 📋 Pré-requisitos

Antes de começar, você precisará ter instalado em sua máquina:

- **PHP 8.2.12**
- **Composer** 
- **Laravel 12**

## ⚙️ Instalação

Siga as etapas abaixo para configurar o ambiente de desenvolvimento:

1. **Instalar as dependências do Laravel**:
    ```bash
    composer install
    ```

2. **Gerar a chave da aplicação**:
    ```bash
    php artisan key:generate
    ```

3. **Iniciar o servidor de desenvolvimento**:
    ```bash
    php artisan serve
    ```

### 🔧 Configuração da API

A aplicação está configurada para usar a API **VoiceRSS** com a chave já incluída no código.

- **URL da API**: https://www.voicerss.org/

### 🖥️ Configuração do Servidor

Por padrão, o comando `php artisan serve` roda na porta **8000**, então a aplicação estará disponível em:
