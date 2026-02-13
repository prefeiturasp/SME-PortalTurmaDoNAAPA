docker_compose('docker-compose.yml')
docker_build('wordpress/turmadonaapa', '.',
  live_update = [
    sync('.', '/var/www/html')
  ])