Docker / Add to another folder

```
ADD . /usr/src/wordpress
RUN chown -R www-data:www-data /usr/src/wordpress
WORKDIR /usr/src/wordpress

COPY docker-entrypoint.sh /usr/local/bin/
RUN chmod 777 /usr/local/bin/docker-entrypoint.sh
```

# Define in CodePipeline

AWS_ECR_URI

AWS_PROJECT_NAME