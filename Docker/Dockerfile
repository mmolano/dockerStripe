FROM registry.gitlab.com/fidensio/docker/production/php/pattern:latest

ARG RepoPath=gitlab.com/fidensio/tools/templates/ms-lumen.git
ARG RepoUsername=Docker
ARG RepoToken=SN1hjma_RLe_46s4yiZp

# Clone project
RUN git clone https://$RepoUsername:$RepoToken@$RepoPath .

# Install project
RUN composer install --no-dev

# Start server
CMD php -S 0.0.0.0:80 -t public
