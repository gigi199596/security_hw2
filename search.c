/*
        this code is used to process the query
*/
#pragma check_stack(off)   //turn off stack security

#include <string.h>
#include <stdio.h>

int add_historic(const char* input)
{
    FILE *fp;
    char buf[10];     //limit the historic to max 10 characters

    strcpy(buf, input);
    int ret = strcmp(buf, "CLEARHISTO");
    if(ret == 0){
        printf("Clearing history");
        clear_history();
    }
    fp = fopen("historic.txt", "w+");
    if (fp == NULL) return -1; //file not opened
    fputs(buf), fp);
    fputs("\n", fp);
    fclose(fp);
    return 0;
}

/*
        this functions clear the history
*/
void clear_history()
{
    res = remove("historic.txt");
    if (res == -1){
        printf("ERROR: Historic not deleted!\n");
    }
    printf("Historic deleted!\n");
}

int main(int argc, char* argv[])
{
    if (argc != 2)
 {
        printf("Please supply a string as an argument!\n");
        return -1;
	}
        add_historic(argv[1]);
        return 0;
}
