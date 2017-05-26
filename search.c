/*
        this code is used to process the query
*/
//#pragma check_stack(off)   //turn off stack security

#include <string.h>
#include <stdio.h>

void clear_historic();

int process(const char* input)
{
    FILE *fp;
    char buf[10];     //limit the historic to max 10 characters
    int clear = 0;

    strcpy(buf, input);
    /*int x;
    for( x = 0; x < 10; x++ ){
        printf("%c", buf[x]);
    }
    printf("\n");
    printf("%d\n", clear); */
    int ret = strcmp(buf, "CLEARHISTO");
    if(ret == 0){
        clear = 1;
    }
    if (clear){
        clear_historic();
    }else{
        fp = fopen("historic.txt", "a");
        if (fp == NULL) return -1; //file not opened
        fputs(buf, fp);
        fputs("\n", fp);
        fclose(fp);
    }
    return 0;
}

/*
        this functions clear the history
*/
void clear_historic()
{
    int res = remove("historic.txt");
    if (res == -1){
        printf("ERROR: Historic not deleted!\n");
    }else{
        printf("Historic deleted!\n");
    }
}

int main(int argc, char* argv[])
{
    if (argc != 2)
    {
        printf("Please supply a string as an argument!\n");
        return -1;
	}
    process(argv[1]);
    return 0;
}
