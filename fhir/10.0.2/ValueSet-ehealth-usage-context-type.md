# eHealth Usage Context Type - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHealth Usage Context Type**

## ValueSet: eHealth Usage Context Type 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/ehealth-usage-context-type | *Version*:10.0.2 |
| Active as of 2020-11-20 | *Computable Name*:eHealthUsageContextType |

 
The following table supersedes the expansion table below for the following codes: 

| | | | |
| :--- | :--- | :--- | :--- |
| focus | http://terminology.hl7.org/CodeSystem/usage-context-type | Clinical Focus | The clinical concept(s) addressed by the artifact/element. For example, disease, diagnostic test interpretation, medication ordering as in http://ehealth.sundhed.dk/vs/conditions |
| program | http://terminology.hl7.org/CodeSystem/usage-context-type | Program | A program/project of work for which this artifact/element is applicable. http://ehealth.sundhed.dk/vs/ehealth-program |
| task | http://terminology.hl7.org/CodeSystem/usage-context-type | Task | A task type for which this artifact/element is applicable. http://ehealth.sundhed.dk/vs/usage-context-task-type |
| workflow | http://terminology.hl7.org/CodeSystem/usage-context-type | Workflow | A workflow for which this artifact/element is applicable. http://ehealth.sundhed.dk/vs/usage-context-workflow |
| activity | http://ehealth.sundhed.dk/cs/ehealth-usage-context-type | Activity Type | The type of activity in which it is relevant to use a module/element having this use context (see http://hl7.org/fhir/metadatatypes.html#UsageContext). For this context type, the value shall be a code taken from the http://ehealth.sundhed.dk/vs/activitydefinition-code value set. |
| supports | http://ehealth.sundhed.dk/cs/ehealth-usage-context-type | Supports | The type of activity supported by a module/element having this use context (see http://hl7.org/fhir/metadatatypes.html#UsageContext). For this context type, the value shall be a code taken from the http://ehealth.sundhed.dk/vs/activitydefinition-code value set. |
| range | http://ehealth.sundhed.dk/cs/ehealth-usage-context-type | Range | The type of reference range with which it is relevant to use a module/element having this use context (see http://hl7.org/fhir/metadatatypes.html#UsageContext). For this context type, the value shall be a code taken from the http://ehealth.sundhed.dk/vs/reference-range-type value set. |
| questionnaire-related | http://ehealth.sundhed.dk/cs/ehealth-usage-context-type | Questionnaire Related | The type of questionnaire element with which it is relevant to use a coded values/id registries having this use context (see http://hl7.org/fhir/metadatatypes.html#UsageContext). For this context type, the value shall be a code taken from the http://ehealth.sundhed.dk/vs/questionnaire-elements value set. |
| system-treatment-area | http://ehealth.sundhed.dk/cs/ehealth-usage-context-type | System Treatment Area | The coexistence tag for which the treatment areas ValueSet is relevant. For this context type, the value shall be a code taken from the http://ehealth.sundhed.dk/vs/ehealth-system value set. |
| condition-qualification | http://ehealth.sundhed.dk/cs/ehealth-usage-context-type | Condition Qualification | A condition qualification for which this artifact/element is applicable. For this context type, the value shall be a code from the value set http://ehealth.sundhed.dk/vs/condition-qualification. |
| body-site | http://ehealth.sundhed.dk/cs/ehealth-usage-context-type | Body Site | A placement on the body for which this artifact/element is applicable. For this context type, the value shall be a code from the value set http://ehealth.sundhed.dk/vs/usage-context-body-site. |

 

 **References** 

* [ehealth-library](StructureDefinition-ehealth-library.md)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-usage-context-type",
  "url" : "http://ehealth.sundhed.dk/vs/ehealth-usage-context-type",
  "version" : "10.0.2",
  "name" : "eHealthUsageContextType",
  "title" : "eHealth Usage Context Type",
  "status" : "active",
  "experimental" : false,
  "date" : "2020-11-20T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "The following table supersedes the expansion table below for the following codes:\n\n| Code                    | System                                                   | Display                 | Definition                                                                                                                                                                                                                                                                                                        |\n|-------------------------|----------------------------------------------------------|-------------------------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|\n| focus                   | http://terminology.hl7.org/CodeSystem/usage-context-type | Clinical Focus          | The clinical concept(s) addressed by the artifact/element. For example, disease, diagnostic test interpretation, medication ordering as in http://ehealth.sundhed.dk/vs/conditions                                                                                                                                |\n| program                 | http://terminology.hl7.org/CodeSystem/usage-context-type | Program                 | A program/project of work for which this artifact/element is applicable. http://ehealth.sundhed.dk/vs/ehealth-program                                                                                                                                                                                             |\n| task                    | http://terminology.hl7.org/CodeSystem/usage-context-type | Task                    | A task type for which this artifact/element is applicable. http://ehealth.sundhed.dk/vs/usage-context-task-type                                                                                                                                                                                                         |\n| workflow                | http://terminology.hl7.org/CodeSystem/usage-context-type | Workflow                | A workflow for which this artifact/element is applicable. http://ehealth.sundhed.dk/vs/usage-context-workflow                                                                                                                                                                                                           |\n| activity                | http://ehealth.sundhed.dk/cs/ehealth-usage-context-type  | Activity Type           | The type of activity in which it is relevant to use a module/element having this use context (see http://hl7.org/fhir/metadatatypes.html#UsageContext). For this context type, the value shall be a code taken from the http://ehealth.sundhed.dk/vs/activitydefinition-code value set.                           |\n| supports                | http://ehealth.sundhed.dk/cs/ehealth-usage-context-type  | Supports                | The type of activity supported by a module/element having this use context (see http://hl7.org/fhir/metadatatypes.html#UsageContext). For this context type, the value shall be a code taken from the http://ehealth.sundhed.dk/vs/activitydefinition-code value set.                                             |\n| range                   | http://ehealth.sundhed.dk/cs/ehealth-usage-context-type  | Range                   | The type of reference range with which it is relevant to use a module/element having this use context (see http://hl7.org/fhir/metadatatypes.html#UsageContext). For this context type, the value shall be a code taken from the http://ehealth.sundhed.dk/vs/reference-range-type value set.                     |\n| questionnaire-related   | http://ehealth.sundhed.dk/cs/ehealth-usage-context-type  | Questionnaire Related   | The type of questionnaire element with which it is relevant to use a coded values/id registries having this use context (see http://hl7.org/fhir/metadatatypes.html#UsageContext). For this context type, the value shall be a code taken from the http://ehealth.sundhed.dk/vs/questionnaire-elements value set. |\n| system-treatment-area   | http://ehealth.sundhed.dk/cs/ehealth-usage-context-type  | System Treatment Area   | The coexistence tag for which the treatment areas ValueSet is relevant. For this context type, the value shall be a code taken from the http://ehealth.sundhed.dk/vs/ehealth-system value set.                                                                                                                    |\n| condition-qualification | http://ehealth.sundhed.dk/cs/ehealth-usage-context-type  | Condition Qualification | A condition qualification for which this artifact/element is applicable. For this context type, the value shall be a code from the value set http://ehealth.sundhed.dk/vs/condition-qualification.                                                                                                                |\n| body-site               | http://ehealth.sundhed.dk/cs/ehealth-usage-context-type  | Body Site               | A placement on the body for which this artifact/element is applicable. For this context type, the value shall be a code from the value set http://ehealth.sundhed.dk/vs/usage-context-body-site.                                                                                                                                |",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/usage-context-type"
    },
    {
      "system" : "http://ehealth.sundhed.dk/cs/ehealth-usage-context-type"
    }]
  }
}

```
