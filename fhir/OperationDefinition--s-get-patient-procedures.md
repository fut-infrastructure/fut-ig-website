# Get patient procedures - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Get patient procedures**

## OperationDefinition: Get patient procedures 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-get-patient-procedures | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:get-patient-procedures |

 
This operation returns an overview of patient activities within a time period and filtered by either EpisodeOfCare or Condition code(s). On success, the returned Bundle contains a Parameters structure detailing the count of measurements received and expected. This is done per ServiceRequest with status active for those part of a CarePlan with status active related to eligible EpisodeOfCare resources. Eligible EpisodeOfCare are those with status active that refer to the given Patient and are either given as EpisodeOfCare reference in input or are referencing a Condition with a condition code that matches at least one of the Condition codes possibly given as input. The measurement regime expressed in ServiceRequest.occurrence[x] is, when possible, resolved to time slot(s) corresponding to datetime/period where an action is supposed to take place, typically performed by the Patient. When the occurrenceTiming variant is used, resolved time slots overlapping with the input time periode are considered. For occurrenceTiming expression which are either adhoc or unresolved, the effective datetime/period of a measurement is considered when checked for overlap with input time period. 

## Input

 
The operation has three mandatory inputs, a Patient reference, a start date and an end date. Additionally the operation has three optional inputs: a list of reference(s) to EpisodeOfCare, a list of Codings for Condition and a list of Codings for tags. 

### Patient reference

 
Mandatory reference for the Patient which the procedure overview is computed for. 

### Start and end datetimes

 
Start and end datetime are both mandatory, and together specify the period of interest in the patient procedure overview. As stated above, for resolvable past and future time slots as well as adhoc and unresolved timings there must overlap with this period. 

### EpisodeOfCare list

 
The list of EpisodeOfCare references is optional. If EpisodeOfCare are provided, these will be used to further filter which active EpisodeOfCare, CarePlan and ServiceRequest are considered for the patient procedure overview. 

### Condition Coding list

 
The list of Coding for Condition is optional. If Condition Coding are provided, the EpisodeOfCare considered are those referring to a Condition matching at least one of the codes in the list. As above, the EpisodeOfCare (one or more) considered further determines which active EpisodeOfCare, CarePlan and ServiceRequest are considered. 

### Tag Coding list

 
The list of Coding for tags is optional. If tag Coding are provided, the EpisodeOfCare considered are those including a tag matching at least one of the codes in the list. As above, both the Condition (one or more) and EpisodeOfCare (one or more) considered further determines which active EpisodeOfCare, CarePlan and ServiceRequest are considered. 

### Extra boolean

 
This is an optional parameter that can be set to true if activities allowing 'Extra' submissions should be included in the response. Whether the ServiceRequest is included when Extra paremeter is set to true, is based on the ServiceRequest.includeAsExtra field. 

## Output

 
For valid inputs, the server will compute and return a Bundle. The Bundle contains a Parameters resource with resolved measurement regimes and associated counts of measurement submitted and counts expected. Such counts are also included in the Parameters structure when the measurement regime is either adhoc or unresolved. In addition, the Bundle contains CarePlan and ServiceRequest referenced in the Parameters. The Bundle can contain an OperationOutcome describing any encountered warnings. 

### Output Parameters

 
The output contains rows (encoded in parameters) for each matching and active ServiceRequest with resolved timings overlapping with the requested period. 
Rows are represented as Parameters.parameter with names: item_1, item_2, etc. Columns are represented as Parameters.parameter.part with name and value 

```
Example:
'resource': {
    'resourceType': 'Parameters',
    'parameter': [{
            'name': 'item_1',
            'part': [{
                    'name': 'CarePlan',
                    'valueReference': {
                        'reference': 'https://careplan.devtest.systematic-ehealth.com/fhir/CarePlan/164581'
                    }
            }]
    }]
}

```

 

### Columns

 
* CarePlan: Reference to the CarePlan that the ServiceRequest belongs to.
* ServiceRequest: Reference to the ServiceRequest.
* ServiceRequestVersionId: The version of the ServiceRequest (version specified at time of submit-measurement or the current version (for expected activities)).
* Activity: Description of the planned activity.
* ResolvedTimingStart: A planned start time for the activity in the requested period.
* ResolvedTimingEnd: A planned end time for the activity in the requested period. May be identical to start if no duration is specified in the measurement regime.
* TotalSubmitted: The number of measurements already submitted for this ServiceRequest and resolved timing.
* SubmittedTimely: The number of measurements where the measurement time matches the resolved timing.
* TimingType: 
* Resolved: a measurement regime that is supported by the infrastructure and where resolved timing and requested number of measurements can be calculated.
* Unresolved: a measurement regime that is not supported by the infrastructure. Resolved Timing Start, end, submitted timely and Occurrences requested will be empty.
* Adhoc: A ServiceRequest without a measurement regime or a measurement regime stating ad-hoc.
* Extra: The service request may be performed outside the resolved timing.
 
* OccurrencesRequested: Expected number of measurements.
* TotalInvalidated: Number of measurements which are invalidated.
 

URL: [base]/$get-patient-procedures

### Parameters

* **Use**: IN
  * **Name**: patient
  * **Scope**: 
  * **Cardinality**: 1..1
  * **Type**: [Reference](http://hl7.org/fhir/R4/references.html#Reference)
  * **Binding**: 
  * **Documentation**: 
* **Use**: IN
  * **Name**: episodeOfCare
  * **Scope**: 
  * **Cardinality**: 0..*
  * **Type**: [Reference](http://hl7.org/fhir/R4/references.html#Reference)
  * **Binding**: 
  * **Documentation**: 
* **Use**: IN
  * **Name**: conditionCodings
  * **Scope**: 
  * **Cardinality**: 0..*
  * **Type**: [Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)
  * **Binding**: 
  * **Documentation**: 
* **Use**: IN
  * **Name**: start
  * **Scope**: 
  * **Cardinality**: 1..1
  * **Type**: [dateTime](http://hl7.org/fhir/R4/datatypes.html#dateTime)
  * **Binding**: 
  * **Documentation**: 
* **Use**: IN
  * **Name**: end
  * **Scope**: 
  * **Cardinality**: 1..1
  * **Type**: [dateTime](http://hl7.org/fhir/R4/datatypes.html#dateTime)
  * **Binding**: 
  * **Documentation**: 
* **Use**: IN
  * **Name**: _tag
  * **Scope**: 
  * **Cardinality**: 0..*
  * **Type**: [Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)
  * **Binding**: 
  * **Documentation**: 
* **Use**: IN
  * **Name**: extra
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [boolean](http://hl7.org/fhir/R4/datatypes.html#boolean)
  * **Binding**: 
  * **Documentation**: 
* **Use**: OUT
  * **Name**: return
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [Bundle](http://hl7.org/fhir/R4/bundle.html)
  * **Binding**: 
  * **Documentation**: 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "-s-get-patient-procedures",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-get-patient-procedures",
  "version" : "6.0.0",
  "name" : "get-patient-procedures",
  "title" : "Get patient procedures",
  "status" : "active",
  "kind" : "operation",
  "date" : "2025-10-23T10:34:08+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [
    {
      "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://ehealth.sundhed.dk"
        }
      ]
    }
  ],
  "description" : "This operation returns an overview of patient activities within a time period and filtered by either EpisodeOfCare or Condition code(s). On success, the returned Bundle contains a Parameters structure detailing the count of measurements received and expected. This is done per ServiceRequest with status active for those part of a CarePlan with status active related to eligible EpisodeOfCare resources. Eligible EpisodeOfCare are those with status active that refer to the given Patient and are either given as EpisodeOfCare reference in input or are referencing a Condition with a condition code that matches at least one of the Condition codes possibly given as input. The measurement regime expressed in ServiceRequest.occurrence[x] is, when possible, resolved to time slot(s) corresponding to datetime/period where an action is supposed to take place, typically performed by the Patient. When the occurrenceTiming variant is used, resolved time slots overlapping with the input time periode are considered. For occurrenceTiming expression which are either adhoc or unresolved, the effective datetime/period of a measurement is considered when checked for overlap with input time period.\r\n## Input\r\nThe operation has three mandatory inputs, a Patient reference, a start date and an end date. Additionally the operation has three optional inputs: a list of reference(s) to EpisodeOfCare, a list of Codings for Condition and a list of Codings for tags.\r\n### Patient reference\r\nMandatory reference for the Patient which the procedure overview is computed for.\r\n### Start and end datetimes\r\nStart and end datetime are both mandatory, and together specify the period of interest in the patient procedure overview. As stated above, for resolvable past and future time slots as well as adhoc and unresolved timings there must overlap with this period.\r\n### EpisodeOfCare list\r\nThe list of EpisodeOfCare references is optional. If EpisodeOfCare are provided, these will be used to further filter which active EpisodeOfCare, CarePlan and ServiceRequest are considered for the patient procedure overview.\r\n### Condition Coding list\r\nThe list of Coding for Condition is optional. If Condition Coding are provided, the EpisodeOfCare considered are those referring to a Condition matching at least one of the codes in the list. As above, the EpisodeOfCare (one or more) considered further determines which active EpisodeOfCare, CarePlan and ServiceRequest are considered.\r\n### Tag Coding list\r\nThe list of Coding for tags is optional. If tag Coding are provided, the EpisodeOfCare considered are those including a tag matching at least one of the codes in the list. As above, both the Condition (one or more) and EpisodeOfCare (one or more) considered further determines which active EpisodeOfCare, CarePlan and ServiceRequest are considered.\r\n### Extra boolean\r\nThis is an optional parameter that can be set to true if activities allowing 'Extra' submissions should be included in the response. Whether the ServiceRequest is included when Extra paremeter is set to true, is based on the ServiceRequest.includeAsExtra field.\r\n## Output\r\nFor valid inputs, the server will compute and return a Bundle. The Bundle contains a Parameters resource with resolved measurement regimes and associated counts of measurement submitted and counts expected. Such counts are also included in the Parameters structure when the measurement regime is either adhoc or unresolved. In addition, the Bundle contains CarePlan and ServiceRequest referenced in the Parameters. The Bundle can contain an OperationOutcome describing any encountered warnings.\r\n### Output Parameters\r\nThe output contains rows (encoded in parameters) for each matching and active ServiceRequest with resolved timings overlapping with the requested period. \r\n\r\nRows are represented as Parameters.parameter with names: item_1, item_2, etc. Columns are represented as Parameters.parameter.part with name and value \r\n```\r\nExample:\r\n'resource': {\r\n    'resourceType': 'Parameters',\r\n    'parameter': [{\r\n            'name': 'item_1',\r\n            'part': [{\r\n                    'name': 'CarePlan',\r\n                    'valueReference': {\r\n                        'reference': 'https://careplan.devtest.systematic-ehealth.com/fhir/CarePlan/164581'\r\n                    }\r\n            }]\r\n    }]\r\n}\r\n ```\r\n\r\n### Columns\r\n\r\n- CarePlan: Reference to the CarePlan that the ServiceRequest belongs to.\r\n- ServiceRequest: Reference to the ServiceRequest.\r\n- ServiceRequestVersionId: The version of the ServiceRequest (version specified at time of submit-measurement or the current version (for expected activities)).\r\n- Activity: Description of the planned activity.\r\n- ResolvedTimingStart: A planned start time for the activity in the requested period.\r\n- ResolvedTimingEnd: A planned end time for the activity in the requested period. May be identical to start if no duration is specified in the measurement regime.\r\n- TotalSubmitted: The number of measurements already submitted for this ServiceRequest and resolved timing.\r\n- SubmittedTimely: The number of measurements where the measurement time matches the resolved timing.\r\n- TimingType:\r\n    * Resolved: a measurement regime that is supported by the infrastructure and where resolved timing and requested number of measurements can be calculated.\r\n    * Unresolved: a measurement regime that is not supported by the infrastructure. Resolved Timing Start, end, submitted timely and Occurrences requested will be empty.\r\n    * Adhoc: A ServiceRequest without a measurement regime or a measurement regime stating ad-hoc.\r\n    * Extra: The service request may be performed outside the resolved timing.\r\n- OccurrencesRequested: Expected number of measurements.\r\n- TotalInvalidated: Number of measurements which are invalidated.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "DK",
          "display" : "Denmark"
        }
      ]
    }
  ],
  "affectsState" : true,
  "code" : "get-patient-procedures",
  "system" : true,
  "type" : false,
  "instance" : false,
  "parameter" : [
    {
      "name" : "patient",
      "use" : "in",
      "min" : 1,
      "max" : "1",
      "type" : "Reference"
    },
    {
      "name" : "episodeOfCare",
      "use" : "in",
      "min" : 0,
      "max" : "*",
      "type" : "Reference"
    },
    {
      "name" : "conditionCodings",
      "use" : "in",
      "min" : 0,
      "max" : "*",
      "type" : "Coding"
    },
    {
      "name" : "start",
      "use" : "in",
      "min" : 1,
      "max" : "1",
      "type" : "dateTime"
    },
    {
      "name" : "end",
      "use" : "in",
      "min" : 1,
      "max" : "1",
      "type" : "dateTime"
    },
    {
      "name" : "_tag",
      "use" : "in",
      "min" : 0,
      "max" : "*",
      "type" : "Coding"
    },
    {
      "name" : "extra",
      "use" : "in",
      "min" : 0,
      "max" : "1",
      "type" : "boolean"
    },
    {
      "name" : "return",
      "use" : "out",
      "min" : 0,
      "max" : "1",
      "type" : "Bundle"
    }
  ]
}

```
