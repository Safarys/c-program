#include<stdio.h>
#include<conio.h>
int power(int n,int f)
{
if(f==0)
{
return 1;
}
else if(f==1)
{
return n;
}
else if(f==2)
{
return n*n;
}
else
{
return n*power(n,f-1);

}
}
void main()
{
clrscr();
int n,f;
printf("Enter the elment and power \t");
scanf("%d%d",&n,&f);
printf("\n %d power of %d = %d",n,f,power(n,f));
getch();
}