#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int getRandomNumber(int maxNumber) {
    int randomNumber = rand() % maxNumber + 1;
    return randomNumber;
}

int main() {
    srand(time(NULL));
    for(int i = 0; i < 50; i++) {
        int randomNumber = getRandomNumber(100); //1-100
        printf("%d\n", randomNumber);
    }
}
