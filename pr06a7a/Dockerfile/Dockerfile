FROM nginx:latest
RUN echo "events { worker_connections 1024; } http { sendfile on; upstream websites { server 172.18.0.2;  server 172.18.0.4;  server 172.18.0.3; } server { listen 80;   location / {proxy_pass http://websites;}   }  } " > /etc/nginx/nginx.conf

