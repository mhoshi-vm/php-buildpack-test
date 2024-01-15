```
cd buildpack_dir
pack config default-builder paketobuildpacks/builder:base
pack build php-api --builder paketobuildpacks/builder:full --path ./ --env BP_PHP_WEB_DIR=httpd/p_api
```

```
docker run --rm -it -p 8080:80 php-api   
```

access http://localhost:8080/main.php
