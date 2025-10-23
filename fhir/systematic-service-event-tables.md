# Systematic Service Event Tables - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* **Systematic Service Event Tables**

## Systematic Service Event Tables

#### EpisodeOfCare Messages

| | | | |
| :--- | :--- | :--- | :--- |
| EHealthSimpleEvent | created | ehealth-episodeofcare | An EpisodeOfCare has been created. This only happens when $create-episode-of-care is called |
| EHealthSimpleEvent | updated | ehealth-episodeofcare | An EpisodeOfCare has been updated. |
| EHealthContextEvent | updated | ehealth-episodeofcare.status | An EpisodeOfCare status has been updated. |
| EHealthReferenceEvent | reference_added | ehealth-episodeofcare.team | A CareTeam has been added to an EpisodeOfCare |
| EHealthReferenceEvent | reference_removed | ehealth-episodeofcare.team | A CareTeam has been removed fra a EpisodeOfCare |

#### CarePlan Messages

| | | | |
| :--- | :--- | :--- | :--- |
| EHealthSimpleEvent | created | ehealth-careplan | A CarePlan has been created. This only happens when $apply is called on a PlanDefinition |
| EHealthSimpleEvent | updated | ehealth-careplan | A CarePlan has been updated. |
| EHealthContextEvent | updated | ehealth-careplan.status | A CarePlan status has been updated. |
| EHealthReferenceEvent | reference_added | ehealth-careplan.partof | A CarePlan has been added as a subplan |
| EHealthReferenceEvent | reference_added | ehealth-careplan.careteam | A CareTeam has been added to a CarePlan |
| EHealthReferenceEvent | reference_removed | ehealth-careplan.careteam | A CareTeam has been removed fra a CarePlan |
| EHealthReferenceEvent | reference_added | ehealth-careplan.subject | A CarePlan has been assigned to a Patient. This only happens when $apply is called on a PlanDefinition |

#### ServiceRequest Messages

| | | | |
| :--- | :--- | :--- | :--- |
| EHealthSimpleEvent | created | ehealth-procedurerequest | Generated when a ServiceRequest is created. This only happens when $apply is called on a PlanDefinition |
| EHealthSimpleEvent | updated | ehealth-procedurerequest | Generated when a ServiceRequest is updated. |

#### Consent Messages

| | | | |
| :--- | :--- | :--- | :--- |
| EHealthSimpleEvent | created | ehealth-consent | Generated when a Consent is created. |
| EHealthSimpleEvent | updated | ehealth-consent | Generated when a Consent is updated. |

##### Device Messages

| | | | |
| :--- | :--- | :--- | :--- |
| EHealthSimpleEvent | created | ehealth-device | A Device has been created. |
| EHealthSimpleEvent | updated | ehealth-device | A Device has been updated. |
| EHealthSimpleEvent | created | ehealth-devicemetric | A DeviceMetric has been created. |
| EHealthSimpleEvent | updated | ehealth-devicemetric | A DeviceMetric has been updated. |
| EHealthSimpleEvent | deleted | ehealth-devicemetric | A DeviceMetric has been deleted. |

#### Document Transformation Messages

| | | | |
| :--- | :--- | :--- | :--- |
| EHealthContextEvent | created | ehealth-documentreference.document-published | A DocumentReference with content type of PHMR or QRD has been created |

#### Measurement Messages

| | | | |
| :--- | :--- | :--- | :--- |
| EHealthContextEvent | created | ehealth-provenance.measurement-received | A measurement has been submitted and a Provenance with policy of type coherent-submitted-measurement has been created |

#### Organization Messages

| | | | |
| :--- | :--- | :--- | :--- |
| EHealthReferenceEvent | reference_added | ehealth-organization.partOf | An Organization for which this Organization is part of has been added |
| EHealthReferenceEvent | reference_removed | ehealth-organization.partOf | An Organization for which this Organization is part of has been removed |

#### CareTeam Messages

| | | | |
| :--- | :--- | :--- | :--- |
| EHealthReferenceEvent | reference_added | ehealth-careteam.reasonReference | The reason for a CareTeam to exist has been added |
| EHealthReferenceEvent | reference_removed | ehealth-careteam.reasonReference | The reason for a CareTeam to exist has been removed |
| EHealthReferenceEvent | reference_added | ehealth-careteam.managingOrganization | An Organization which is responsible for a CareTeam has been added |
| EHealthReferenceEvent | reference_removed | ehealth-careteam.managingOrganization | An Organization which is responsible for a CareTeam has been removed |

#### PlanDefinition Messages

| | | | |
| :--- | :--- | :--- | :--- |
| EHealthSimpleEvent | created | ehealth-plandefinition | A PlanDefinition has been created. |
| EHealthSimpleEvent | updated | ehealth-plandefinition | A PlanDefinition has been updated. |
| EHealthReferenceEvent | reference_added | ehealth-plandefinition.relatedArtifact.resource | Info-material has been added to the PlanDefinition |
| EHealthReferenceEvent | reference_removed | ehealth-plandefinition.relatedArtifact.resource | Info-material has been removed from the PlanDefinition |
| EHealthReferenceEvent | reference_added | ehealth-plandefinition.action.definition | An ActivityDefinition or Sub-plan has been added to the PlanDefinition |
| EHealthReferenceEvent | reference_removed | ehealth-plandefinition.action.definition | An ActivityDefinition or Sub-plan has been removed from the PlanDefinition |

#### ActivityDefinition Messages

| | | | |
| :--- | :--- | :--- | :--- |
| EHealthSimpleEvent | created | ehealth-activitydefinition | An ActivityDefinition has been created. |
| EHealthSimpleEvent | updated | ehealth-activitydefinition | An ActivityDefinition has been updated. |
| EHealthReferenceEvent | reference_added | ehealth-activitydefinition.relatedArtifact.resource | Info-material has been added to the ActivityDefinition |
| EHealthReferenceEvent | reference_removed | ehealth-activitydefinition.relatedArtifact.resource | Info-material has been removed from the ActivityDefinition |

#### DocumentReference Messages

| | | | |
| :--- | :--- | :--- | :--- |
| EHealthSimpleEvent | created | ehealth-documentreference | A DocumentReference has been created. |
| EHealthSimpleEvent | updated | ehealth-documentreference | A DocumentReference has been updated. |

##### Questionnaire Messages

| | | | |
| :--- | :--- | :--- | :--- |
| EHealthSimpleEvent | created | ehealth-questionnaire | A Questionnaire has been created. |
| EHealthSimpleEvent | updated | ehealth-questionnaire | A Questionnaire has been updated. |
| EHealthContextEvent | updated | ehealth-questionnaire.retired | A Questionnaire has been retired. |

#### SSL Annotation Messages

| | | | |
| :--- | :--- | :--- | :--- |
| EHealthSimpleEvent | created | ssl-annotation | An Annotation has been created |
| EHealthSimpleEvent | updated | ssl-annotation | An Annotation has been updated |
| EHealthSimpleEvent | deleted | ssl-annotation | An Annotation has been deleted |

#### SSL BlackList Messages

| | | | |
| :--- | :--- | :--- | :--- |
| EHealthSimpleEvent | created | ssl-blackList | A BlackList has been created |
| EHealthSimpleEvent | deleted | ssl-blackList | A BlackList has been deleted |

#### SSL Catalogue Messages

| | | | |
| :--- | :--- | :--- | :--- |
| EHealthSimpleEvent | created | ssl-catalogue | A Catalogue has been created |
| EHealthSimpleEvent | updated | ssl-catalogue | A Catalogue has been updated |

#### SSL CatalogueItem Messages

| | | | |
| :--- | :--- | :--- | :--- |
| EHealthSimpleEvent | created | ssl-catalogueItem | A CatalogueItem has been created |
| EHealthSimpleEvent | updated | ssl-catalogueItem | A CatalogueItem has been updated |

#### SSL WhiteList Messages

| | | | |
| :--- | :--- | :--- | :--- |
| EHealthSimpleEvent | created | ssl-whiteList | A WhiteList has been created |
| EHealthSimpleEvent | deleted | ssl-whiteList | A WhiteList has been deleted |

#### SSL Order Messages

| | | | |
| :--- | :--- | :--- | :--- |
| EHealthSimpleEvent | created | ssl-order | An Order has been created |
| EHealthSimpleEvent | updated | ssl-order | An Order has been updated |
| EHealthSimpleEvent | deleted | ssl-order | An Order has been deleted |

#### SSL OrderLine Messages

| | | | |
| :--- | :--- | :--- | :--- |
| EHealthSimpleEvent | created | ssl-orderline | An OrderLine has been created |
| EHealthSimpleEvent | updated | ssl-orderline | An OrderLine has been updated |
| EHealthSimpleEvent | deleted | ssl-orderline | An OrderLine has been deleted |

#### ClinicalImpression Messages

| | | | |
| :--- | :--- | :--- | :--- |
| EHealthSimpleEvent | created | ehealth-clinicalimpression | A ClinicalImpression has been created |
| EHealthSimpleEvent | updated | ehealth-clinicalimpression | A ClinicalImpression has been updated |
| EHealthContextEvent | created | ehealth-clinicalimpression.approved-for-sharing | A ClinicalImpression has been approved for sharing |
| EHealthContextEvent | updated | ehealth-clinicalimpression.approved-for-sharing | A ClinicalImpression has been approved for sharing |

#### Task Messages

| | | | |
| :--- | :--- | :--- | :--- |
| EHealthSimpleEvent | created | ehealth-task | A Task has been created. |
| EHealthSimpleEvent | updated | ehealth-task | A Task has been updated. |
| EHealthReferenceEvent | reference_added | ehealth-task.owner | The owner reference has been added to a Task |
| EHealthReferenceEvent | reference_removed | ehealth-task.owner | The owner reference has been removed from a Task |
| EHealthReferenceEvent | reference_added | ehealth-task.responsible | The responsible reference has been added to a Task |
| EHealthReferenceEvent | reference_removed | ehealth-task.responsible | The responsible reference has been removed from a Task |

#### Automated Processing Messages

| | | | |
| :--- | :--- | :--- | :--- |
| EHealthContextEvent | created | ehealth-provenance.measurement-processed | A measurement has been automatically processed |
| EHealthContextEvent | created | ehealth-procedurerequest.measurement-missing | An expected measurement has not been submitted |

#### CodeSystem Messages

| | | | |
| :--- | :--- | :--- | :--- |
| EHealthSimpleEvent | created | CodeSystem | A CodeSystem has been created |
| EHealthSimpleEvent | updated | CodeSystem | A CodeSystem has been updated |
| EHealthSimpleEvent | deleted | CodeSystem | A CodeSystem has been deleted |

#### ValueSet Messages

| | | | |
| :--- | :--- | :--- | :--- |
| EHealthSimpleEvent | created | ValueSet | A ValueSet has been created |
| EHealthSimpleEvent | updated | ValueSet | A ValueSet has been updated |
| EHealthSimpleEvent | deleted | ValueSet | A ValueSet has been deleted |

#### NamingSystem Messages

| | | | |
| :--- | :--- | :--- | :--- |
| EHealthSimpleEvent | created | NamingSystem | A NamingSystem has been created |
| EHealthSimpleEvent | updated | NamingSystem | A NamingSystem has been updated |
| EHealthSimpleEvent | deleted | NamingSystem | A NamingSystem has been deleted |

#### ConceptMap Messages

| | | | |
| :--- | :--- | :--- | :--- |
| EHealthSimpleEvent | created | ConceptMap | A ConceptMap has been created |
| EHealthSimpleEvent | updated | ConceptMap | A ConceptMap has been updated |
| EHealthSimpleEvent | deleted | ConceptMap | A ConceptMap has been deleted |

