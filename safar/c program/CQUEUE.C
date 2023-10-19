#include<stdio.h>
#include<conio.h>
int queue[100];
int front=-1;
int rear=-1;
int item,n;

void enqueue()
{
if(front==(rear+1)%n)
{
printf("queue overflow");
}
else if(front==-1 && rear==-1)
{
printf("Enter value ");
scanf("%d",&item);
front=0;
rear=0;
queue[rear]=item;
printf("value inserted");
}
else
{
printf("Enter value");
scanf("%d",&item);
rear=(rear+1)%n;
queue[rear]=item;
printf("value inserted");
}
}
void dequeue()
{
if(front==-1 && rear==-1)
{
printf("queue overflow");
}
else if(front==rear)
{
printf("%d deleted",queue[front]);
queue[front]=NULL;
front=-1;
rear=-1;
}
else
{
printf("%d deleted",queue[front]);
queue[front]=NULL;
front=(front+1)%n;
}
}
void display()
{
int i;
printf("The cicular queue");
for(i=0;i<n;++i)
{
if(queue[i]==NULL)
printf("-");
else
printf("%d",queue[i]);
}
printf("\n");
}
void search()
{
int e,i;
printf("Enter the element to search ");
scanf("%d",&e);
for(i=0;i<n;i++)
{
if(e==queue[i])
{
printf("%d Element found at position %d ",e,i+1);
}
else
{
printf("-");
}
}
}
void main()
{
int c;
printf("Enter the size of queue ");
scanf("%d",&n);
do
{
printf("\n menu\n1:insert\n2:delete\n3:display\n4:search\n ");
printf("\n Enter Your choice ");
scanf("%d",&c);
switch(c)
{
case 1:enqueue();
continue;
case 2:dequeue();
continue;
case 3:display();
continue;
case 4:search();
continue;
default:exit(0);
}
}while(c!=0);
}
