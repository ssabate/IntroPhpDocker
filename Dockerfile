FROM tutum/lamp:latest
RUN rm -fr /app && git clone https://github.com/ssabate/IntroPhp.git /app
EXPOSE 83 3309
CMD ["/run.sh"]
