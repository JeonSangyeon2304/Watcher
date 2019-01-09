#include<stdio.h>

int main(int argc, char *argv[]){
  int num = 8;
  char buf[12];
  printf("Num is ?\n");

  fgets(buf, 48, stdin);

  printf("Num is %d\n", num);
  printf("buffer is %s", buf);
}
