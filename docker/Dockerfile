FROM hacklab/mapasculturais:8.0.0-alpha

COPY themes /var/www/src/themes
COPY plugins /var/www/src/plugins

COPY themes/Cacicadas/overrides/taxonomies.php /var/www/src/conf/taxonomies.php
COPY themes/Cacicadas/overrides/agent-types.php /var/www/src/conf/agent-types.php
COPY themes/Cacicadas/overrides/space-types /var/www/src/conf/space-types
COPY themes/Cacicadas/overrides/opportunity-types /var/www/src/conf/opportunity-types

WORKDIR /var/www/src
RUN pnpm install --recursive && pnpm run build 
WORKDIR /var/www

COPY docker/common/config.d /var/www/config/common.d
COPY docker/production/config.d /var/www/config/config.d
