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
  char Hashed_PW[] = "ED3AA79DAF8E991ADDA33B8B0EEF5284";
  int i;
  int len = strlen(Hashed_PW);
  if((shmid = shmget(key, SHMSZ, IPC_CREAT|0666))<0){
    perror("shmget");
    exit(1);
  }

  if((shm = shmat(shmid, NULL, 0)) == (char*)-1){
    perror("shmat");
    exit(1);
  }

  s = shm;

  for(i=0; i<len; i++){
    *s++=Hashed_PW[i];
  }
  *s = NULL;

  while(*shm != '*'){
    sleep(1);
  }
  exit(1);
}
