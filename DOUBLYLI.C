#include<stdio.h>
#include<conio.h>
#include<stdlib.h>
struct node
{
int data;
struct node *prev,*next;
};
struct node *head=NULL;
void insertb()
{
struct node *newnode=(struct node *)malloc(sizeof(struct node));
int b;
printf("\n Enter Element at Begining");
scanf("%d",&b);
if(head==NULL)
{
 newnode->data=b;
 newnode->next=head;
 head=newnode;
 newnode->prev=NULL;
}
else
{
newnode->data=b;
head->prev=newnode;
newnode->next=head;
head=newnode;
newnode->prev=NULL;
}
}
void insertp()
{
int i=1,p,e;
struct node *newnode=(struct node *)malloc(sizeof(struct node));
struct node *temp;
temp=head;

printf("Enter Position to insert ");
scanf("%d",&p);
printf("Enter Element to insert ");
scanf("%d",&e);

while(i<p)
{
temp=temp->next;
i++;
}
newnode->data=e;
newnode->next=temp->next;
newnode->prev=temp;
temp->next=newnode;
}
void deleteb()
{
struct node *temp;
temp=head;
head=head->next;
head->prev=NULL;
printf("Deleted");
}
void deletep()
{
struct node *temp,*old;
int p,i=1;
printf("\n Enter position to delete ");
scanf("%d",&p);

temp=head;
while(i<p)
{
temp=temp->next;
i++;
}
old=temp->next;
temp->next=old->next;
old->next->prev=temp;
printf("Deleted");
}
void display()
{
struct node *temp;
temp=head;
while(temp!=NULL)
{
printf("%d ",temp->data);
temp=temp->next;
}
}
void main()
{
int c;
clrscr();
do
{
printf("\n Menu \n 1:Insert at Begining \n 2:Insert at Position \n 3:Delete at Begining \n 4:Delete at Position\n 5:Display \n 6:exit\n");
printf("\n Enter your choice: ");
scanf("%d",&c);
switch(c)
{
 case 1:insertb();
 break;
 case 2:insertp();
 break;
 case 3:deleteb();
 break;
 case 4:deletep();
 break;
 case 5:display();
 break;
 case 6:exit(1);
 default:printf("Invalid option");
 break;
}
}
while(1);
}
