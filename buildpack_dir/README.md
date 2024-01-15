```
cd buildpack_dir
pack config default-builder paketobuildpacks/builder:base
ack build php-api --builder paketobuildpacks/builder:full --path ./ --env BP_PHP_WEB_DIR=httpd/p_api
```

