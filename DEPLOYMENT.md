# Deployment Guide

This application is configured for deployment to Azure Web App using GitHub Actions. The deployment process includes:

1. Building a Docker container
2. Pushing to Azure Container Registry
3. Deploying to Azure Web App

## Prerequisites

- Azure Web App service
- Azure Container Registry
- GitHub Actions workflow configured with:
  - AZURE_CLIENT_ID
  - AZURE_TENANT_ID
  - AZURE_SUBSCRIPTION_ID

## Deployment Process

The deployment is automated via GitHub Actions and triggers on:
- Push to main branch
- Pull requests to main branch
- Manual workflow dispatch

The application is containerized using Docker and deployed as a PHP web application.
