FROM linode/lamp
COPY run.sh /run.sh
COPY src/ /var/www/example.com/public_html/
RUN chmod +x /run.sh
CMD ["/bin/bash", "-lc", "/run.sh"]


