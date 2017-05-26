/*
        this code is used to process the query
*/
#pragma check_stack(off)   //turn off stack security

#include <string.h>
#include <stdio.h>

void clear_historic();

int add_historic(const char* input)
{
    FILE *fp;
    char buf[10];     //limit the historic to max 10 characters

    strcpy(buf, input);
    /*int ret = strcmp(buf, "CLEARHISTO");
    if(ret == 0){
        printf("Clearing history... \n");
        clear_historic();
        return 0;
    }
    fp = fopen("historic.txt", "a");
    if (fp == NULL) return -1; //file not opened
    fputs(buf, fp);
    fputs("\n", fp);
    fclose(fp); */
    return 0;
    printf("I got hacked\n");
}

/*
        173 bytes
        this functions clear the history
*/
void clear_historic()
{
    int res = remove("historic.txt");
    if (res == -1){
        printf("ERROR: Historic not deleted!\n");
    }
    printf("Historic deleted!\n");
}

int main(int argc, char* argv[])
{
    printf("Address of add_historic = %p\n", add_historic);
    printf("Address of clear_historic = %p\n", clear_historic);
    if (argc != 2)
 {
        printf("Please supply a string as an argument!\n");
        return -1;
	}
        add_historic(argv[1]);
        return 0;
}
