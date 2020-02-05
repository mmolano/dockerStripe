FROM registry.gitlab.com/fidensio/docker/production/php/pattern:latest

ARG RepoToken=HgWPVDcgzyDyb7sYEHFQ
ARG RepoPath=gitlab.com/fidensio/tools/templates/ms-lumen.git

# Clone project
RUN git clone https://docker:$RepoToken@$RepoPath .

# Install project
RUN composer install --no-dev

# Start server
CMD php -S 0.0.0.0:80 -t public
