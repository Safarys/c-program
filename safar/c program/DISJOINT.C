#include<stdio.h>
#include<conio.h>
#define n 10
int seta[n]={1,2,3,4,5};
int setb[n]={6,7,8,9,10};
void find()
{
 int i,e,t=0;
 printf("\n Enter element to search ");
 scanf("%d",&e);
 for(i=0;i<n;i++)
 {
 if(seta[i]==e)
 {
 printf("The parent of element %d",seta[0]);
 t=1;
 break;
 }
 else if(setb[i]==e)
 {
 printf("The Parent of element is %d",setb[0]);
 t=1;
 break;
 }
 }
 if(t==0)
 printf("\n Element not found in both sets");
}
void main()
{

 int unionset[n],i=0,j=0;
 clrscr();


 while(i<n)
 {
  unionset[i]=seta[j];
  i++;
  unionset[i]=setb[j];
  i++;
  j++;
 }
 printf("\nThe Disjoint Set Union \n");
 for(i=0;i<n;i++)
 {
 printf("%d ",unionset[i]);
 }

  find();
 getch();

}