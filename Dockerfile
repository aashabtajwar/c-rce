FROM gcc:4.9
COPY main.c .
#CMD ["gcc", "main.c", "-o", "main"]
RUN gcc main.c -o main -std=c99
CMD ["./main"]
