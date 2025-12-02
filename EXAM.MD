# Exam Instructions

## Overview
This exam requires you to implement a series of operations involving API interactions, data management, and financial calculations.

## Tasks

### 1. Study {url}

### 2. Perform the following:
#### 2a. Data Collection and Storage
- Pull Investor Data from the API endpoint
- Pull Fund Data from the API endpoint
- Pull Investor Investment Data from the API endpoint
- Save all retrieved data to your database

#### 2b. Data Update and Submission
- Update investor data according to the requirements
- Push the updated data back to {url}

### 3. Draw an Equity Curve
- Using the data in {file}, generate an equity curve visualization
- The equity curve should clearly display the performance over time
- Include appropriate labels and legends for clarity

### 4. Calculate Financial Metrics

#### 4a. Annual Return
Calculate the annual return based on the following formula:
```
Annual Return = mean of Pnl x 365
```

#### 4b. Sharpe Ratio
Calculate the Sharpe Ratio based on the following formula:
```
Sharpe Ratio = (mean of pnl / standard deviation of pnl) x square root of 365
```

#### 4c. Maximum Drawdown
Calculate the Maximum Drawdown based on the following formula:
```
Maximum Drawdown = Max of DD
```

#### 4d. Calmar Ratio
Calculate the Calmar Ratio based on the following formula:
```
Calmar Ratio = Annual Return / |Maximum Drawdown|
```
