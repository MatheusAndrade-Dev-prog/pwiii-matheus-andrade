# pwiii-matheus-andrade

Aula de programação web lll com professor joão sales

# Aula 27-02

## Conteúdo

- Introdução a documentação;
- Apresentação de Framework;
   - Laravel

## Como Instalar o Laravel

- Laravel é um framework para aplicações web com sintaxe expressiva e elegante. Um framework web fornece uma estrutura e um ponto de partida para a criação da sua aplicação, permitindo que você se concentre em criar algo incrível enquanto nós cuidamos dos detalhes.

# Vamos começar passo a passo de como instalar o Laravel.

1 - Tenha o PHP instalado na maquina ou em um servidor local como por exemplo o Xammp ou qualquer outro ambiente de desenvolvimento que tenha o PHP incluindo

LINK - PHP: https://www.php.net/
LINK DO XAMPP: https://www.apachefriends.org/index.html

ou caso que não tenha o PHP ou Xammp instalado na maquina local pode usar esse comando abaixo
versão wWindows PowerShell

# Run as administrator...

Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))

versão Linux
/bin/bash -c "$(curl -fsSL https://php.new/install/linux/8.4)"

versão macOS
/bin/bash -c "$(curl -fsSL https://php.new/install/mac/8.4)"

2- tenha o composer instalado para gerenciar as dependências do php e o laravel.

link - https://getcomposer.org/doc/

3 - tenha o Laravel instalado para começa o desevolvimento

link - https://github.com/laravel/installer

em caso que o php e o composer estiver instaldo pasta
digita o comando: composer global require laravel/installer

além disso tenha o node e o NPM intalador

link -https://nodejs.org/pt-br

ou o bun link -https://bun.sh/

# Para inicia o desemvolvimento

- para inicia o desemvolvimento parta digita o comando: laravel new example-app
  depois que a intalação iniciar vai pedir o nome do projeto que vc quer fazer
  depois de alguns minutos a estrutura ficar pronta para iniciar o deselvovimento.

Para entra na pasta do projeto digita o comando: cd example-app
o npm install && npm run build server para instalar e rodar o node_modules
e o composer run dev para iniciar o servidor local
