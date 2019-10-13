#include<stdio.h>

struct process{
	int pid, a_t, b_t;
}process_count[3], temp;

void swap(){
	for(int i = 0; i<2; i++){
		for(int j = i + 1; j<3; j++)
			if(process_count[i].a_t > process_count[j].a_t){
				temp = process_count[i];
				process_count[i] =process_count[j];
				process_count[j] = temp;
			}
	}
}

void print_process_info(){
	for(int i = 0; i<3; i++){
		printf("PID : %d\nAT : %d\nBT : %d\n", process_count[i].pid, process_count[i].a_t, process_count[i].b_t);
	}
}

void get_process_info(){
	for(int i = 0; i<3; i++){
		printf("Enter values : ");
		scanf("%d%d%d", &process_count[i].pid, &process_count[i].a_t, &process_count[i].b_t);
	}
	swap();
	print_process_info();
}

int main(){
	get_process_info();
	return 0;
}
