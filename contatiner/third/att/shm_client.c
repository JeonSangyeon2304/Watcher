#include<stdio.h>
#include<string.h>
#include<sys/types.h>
#include<sys/ipc.h>
#include<sys/shm.h>

#define SHMSZ 30

int main(int argc, char *argv[]){
  int shmid;
  key_t key = 1801;
  char *shm, *s;

  if((shmid = shmget(key, SHMSZ, 0666))<0){
    perror("shmget");
    exit(1);
  }

  if((shm = shmat(shmid, NULL, 0)) == (char*)-1){
    perror("shmat");
    exit(1);
  }

  for(s=shm; *s!=NULL; s++){
    putchar(*s);
  }
  putchar('\n');

  *shm = '*';

  exit(1);
}
