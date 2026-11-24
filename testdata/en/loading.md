# Loading - FUT test data v0.1.6

* [**Table of Contents**](toc.md)
* **Loading**

## Loading

The data in this guide is loaded on the development test environment (DEVENVCGI) by the test data loader, a job that runs there on a regular schedule. It never runs on production. Each run first clears the environment's clinical data, then loads the data of this guide again. The example data is reloaded when the job run has finished.

### What a run removes

* Every resource in the measurement, careplan and task services: observations, questionnaire responses, care plans, episodes of care, conditions, service requests, provenances, clinical impressions, tasks and the rest. **This includes data a vendor has created on DEVENVCGI, not only the data of this guide.**
* In the document-transformation service, every Composition and DocumentReference, except the questionnaire form definitions.
* In the patient service, every Communication.

### What a run keeps

* The context: patients, organizations, care teams and practitioners.
* The definitions: terminology, plan definitions, activity definitions, libraries and questionnaires, with the questionnaire form definitions in document-transformation.
* In the patient service, every Appointment.

### What a run loads

* The vendor-scoped data once per vendor in the [Vendors](vendors.md) table, with the coexistence tag and programme of that vendor in place of the placeholders.
* Every date moved by the number of days between the anchor date in [Loader settings](Parameters-loader-settings.md) and the day of the load.
* Not the ClinicalImpressions and Tasks: they are expected results. Triage creates its own when the loaded observations and questionnaire responses are processed.

Data that is already there is not created again, so the patients, care teams, practitioners and definitions are reused from one run to the next.

### What a vendor can rely on

* The resource ids on the environment are assigned by the services, not taken from this guide, and everything the run removes gets new ids when it is loaded again. Find resources by their identifiers instead: these are the same after every run.
* The job loads the JSON examples of the published version of this guide (see [Downloads](downloads.md)).

