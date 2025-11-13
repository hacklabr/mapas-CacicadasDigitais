FROM hacklab/mapasculturais:8.0.0-alpha

COPY themes /var/www/src/themes
COPY plugins /var/www/src/plugins

COPY docker/overrides/taxonomies.php /var/www/src/conf/taxonomies.php
COPY docker/overrides/agent-types.php /var/www/src/conf/agent-types.php
COPY docker/overrides/space-types.php /var/www/src/conf/space-types.php
COPY docker/overrides/opportunity-types.php /var/www/src/conf/opportunity-types.php

WORKDIR /var/www/src
RUN pnpm install --recursive && pnpm run build 
WORKDIR /var/www

COPY docker/common/config.d /var/www/config/common.d
COPY docker/production/config.d /var/www/config/config.d
