#include <stdio.h>
#include<conio.h>
#include <stdlib.h>
struct Node {
    int data;
    struct Node *next;
};
struct Node *top = NULL;
struct Node *temp;

void push(int value) {
    struct Node * newNode;
    newNode = (struct Node *)malloc(sizeof(struct Node));
    newNode->data = value;
    if (top == NULL) {
	newNode->next = NULL;
    } else {
	newNode->next = top;
    }
    top = newNode;
    printf("Node is Inserted\n\n");
}

void pop() {
    if (top == NULL) {
	printf("\nStack Underflow\n");
    } else {
	struct Node *temp = top;
	int temp_data = top->data;
	top = top->next;
	free(temp);

    }
}

void display() {
    struct Node *temp=top;
    if (top == NULL) {
	printf("\nStack Underflow\n");
    } else {
	printf("The stack is \n");

	while (temp->next != NULL) {
	    printf("%d--->", temp->data);
	    temp = temp->next;
	}
	printf("%d--->NULL\n\n", temp->data);
    }
}

void main() {
    int choice, value;
    clrscr();
    printf("\n---LINKED STACK---\n");

    printf("CHOICES\n-------\n1. Push\n2. Pop\n3. Display\n4. Exit\n");
    do{
	printf("\nEnter your choice : ");
	scanf("%d", &choice);
	switch (choice) {
	case 1:
	    printf("\nEnter the value to insert: ");
	    scanf("%d", &value);
	    push(value);
	    break;
	case 2:
	    printf("Popped element is :%d\n", pop());
	    break;
	case 3:
	    display();
	    break;
	case 4:
	    exit(0);
	    break;
	default:
	    printf("\nWrong Choice\n");
	}
    }while(1);
}
